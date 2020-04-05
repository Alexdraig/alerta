<?php
	echo "<script>\n";
		if (isset($_GET['page'])) {
			if ($_GET['page'] >= 0 && $_GET['page'] <= 2) {
				echo "page_current = ".$_GET['page']."\n";
			}else {
				// header('Location: index.php');
				header('Location: http://sisbib.unmsm.edu.pe/');
				die();
			}
		}else {
			echo "page_current = 0\n";
		};

		if (isset($_GET['service'])) {
			if ($_GET['service'] >= 0 && $_GET['service'] <= 3) {
				echo "service_current = ".$_GET['service']."\n";
			} else {
				// header('Location: ?page=1');
				header('Location: http://sisbib.unmsm.edu.pe/');
				die();
			}
		}else {
			echo "service_current = 0\n";
		};

		if (isset($_GET['bc_v'])) {
			if ($_GET['bc_v'] >= 0 && $_GET['bc_v'] <= 1) {
				echo "bc_v_current = ".$_GET['bc_v']."\n";
			} else {
				// header('Location: ?page=1');
				header('Location: http://sisbib.unmsm.edu.pe/');
				die();
			}
		}else {
			echo "bc_v_current = 0\n";
		};

		if (isset($_GET['bc_s'])) {
			if ($_GET['bc_s'] >= 0 && $_GET['bc_s'] <= 8) {
				echo "bc_s_current = ".$_GET['bc_s']."\n";
			} else {
				// header('Location: ?page=1');
				header('Location: http://sisbib.unmsm.edu.pe/');
				die();
			}
		}else {
			echo "bc_s_current = 0\n";
		};

		if (isset($_GET['resource'])) {
			if ($_GET['resource'] >= 0 && $_GET['resource'] <= 4) {
				echo "resource_current = ".$_GET['resource']."\n";
			}else {
				// header('Location: ?page=2');
				header('Location: http://sisbib.unmsm.edu.pe/');
				die();
			}
		}else {
			echo "resource_current = 0\n";
		};

		if (isset($_GET['colec'])) {
			if ($_GET['colec'] >= 0 && $_GET['colec'] <= 7) {
				echo "colec_current = ".$_GET['colec']."\n";
			}else {
				// header('Location: ?colec=0');
				header('Location: http://sisbib.unmsm.edu.pe/');
				die();
			}
		}else {
			echo "colec_current = 0\n";
		};

		// if (isset($_GET['revista'])) {
		// 	if ($_GET['revista'] >= 0 && $_GET['revista'] <= 1) {
		// 		echo "revista_current = ".$_GET['revista']."\n";
		// 	}else {
		// 		header('Location: http://sisbib.unmsm.edu.pe/');
		// 		die();
		// 	}
		// }else {
		// 	echo "revista_current = 0\n";
		// };
	echo "</script>\n";
?>