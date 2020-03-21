<?php
  header("Access-Control-Allow-Origin: *");

  if(isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
  }
  if(isset($_GET['rating'])) {
    $rating = htmlspecialchars($_GET['rating']);
  }

	function check_ip($id) {
		$file = "ipsperre_" . $id . ".txt.move";
		$end_file = "ipsperre_" . $id . ".txt";
		$time = time();
		$limit = 3 * 24 * 60 * 60; // 3 days block
		$found = 0;

		if(!file_exists($end_file)) {
			$fh = fopen($end_file, "w");
			fclose($fh);
		}

		$lines = file($end_file);
		$fp = fopen($file, "a");

		foreach($lines as $line_num => $line) {
			$thisip = explode(":", $line);
			if(($thisip[0] == $_SERVER['REMOTE_ADDR']) && ($time - $thisip[1] < $limit)) {
				$found = 1;
				$rem_stamp = $time - $thisip[1];
			}
		}

		foreach($lines as $line_num => $line) {
			$thisip = explode(":", $line);
			$check_lim = $time - $thisip[1];
			if($check_lim < $limit) {
				fputs($fp, $line);
			}
		}

		if($found == 1) {
			print("Schon bewertet");
			fclose($fp);
			@rename($file, $end_file);
			exit;
		}
		else {
			fputs($fp, $_SERVER['REMOTE_ADDR'] . ":" . $time . "\n");
		}

		fclose($fp);
		@rename($file, $end_file);
	}

  function save_rating($id, $rating) {
		check_ip($id);
    if(file_exists($id.".json")) {
      $fp = fopen($id.".json", "r");
      $line = fgets($fp);
      $jsonrating = json_decode($line,true);
      fclose($fp);

      $fp = fopen($id.".json", "w");
      $jsonrating[$rating]++;
      fputs($fp, json_encode($jsonrating));
    }
  }

  function deliver_rating($id) {
    if(empty($id)) { exit; }
    if(file_exists($id.".json")) {
      $fp = fopen($id.".json", "r");
      $line = fgets($fp);
      $jsonrating = json_decode($line,true);
      $votes = 0;
      $average = 0;

      foreach($jsonrating as $key => $val) {
        $votes += $val;
        $average += $key * $val;
      }
      if($votes > 0) {
        $average = $average / $votes;
        $average = round($average, 0, PHP_ROUND_HALF_UP);
      }


      fclose($fp);

      $result = array(
        "id" => $id,
        "rating" => $average,
        "votes" => $votes
      );
      print(json_encode($result));
    }
    else {
      exit;
    }
  }

  if(isset($id) && isset($rating)) {
    save_rating($id, $rating);
    print("Danke");
    return;
  }

  if(isset($id) && empty($rating)) {
    deliver_rating($id);
    return;
  }

?>
