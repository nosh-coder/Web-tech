<?php $bg = ($theme=='dark') ? 'black' : 'white'; ?>
<body style="background:<?= $bg ?>; color:<?= ($theme=='dark')?'white':'black' ?>">
<form method="post">
<select name="theme">
<option value="light">Light</option>
<option value="dark">Dark</option>
</select>
<button>Save</button>
</form>
<a href="index.php?page=dashboard">Back</a>
</body>