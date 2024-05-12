<?php if ($message = Session::flash('error')) { ?>
    <?php if (is_array($message)) { ?>
        <div class="error">
            <ul style="list-style-position: inside;">
                <?php foreach ($message as $item) { ?>
                    <li><?php echo $item[0]; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } else { ?>
        <div class="error"><?php echo $message; ?></div>
    <?php } ?>
<?php } ?>

<?php if ($message = Session::flash('success')) { ?>
    <?php if (is_array($message)) { ?>
        <div class="success">
            <ul style="list-style-position: inside;">
                <?php foreach ($message as $item) { ?>
                    <li><?php echo $item[0]; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } else { ?>
        <div class="success"><?php echo $message; ?></div>
    <?php } ?>
<?php } ?>