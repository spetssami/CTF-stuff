<?php
echo '<pre>';

$last_line = system('pwd', $retval);
// /usr/local/bin/score df656628-bef4-410b-9796-68228130dcd1
// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>
