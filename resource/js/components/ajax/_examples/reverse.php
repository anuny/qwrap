<?php
$text = $_REQUEST['t'];
// ����ĸȫ����ת
$text = strrev($text);
// �������ٷ�ת����
$len = strlen($text);

for ($i = 1, $start = 0, $end; $i <= $len; $i++) {
	if ($i === $len || $text[$i] === ' ') {
		// swap
		$end = $i - 1;
		while ($end > $start) {
			$tmp = $text[$start];
			$text[$start] = $text[$end];
			$text[$end] = $tmp;
			$start++;
			$end--;
		}
		$start = $i + 1;
	}
}
echo $text;