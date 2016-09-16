<?php include "header.php" ?>

<br/><br/>

<p>This tool allows you to check one or multiple links by getting the HTTP header.<br/>
    <br/>You can test sites, trackers and so on..
    <br/> By entering urls <u>line by line</u> you'll get the status code and other useful informations.</p>

<form id="main-form" action="check.php" method="POST"> <!-- style="pointer-events: none;"> -->
    <div class="form-group">
        <textarea class="form-control" name="indirizzi" rows="6"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Check URLs!</button>
    </div>
</form>

<p>Due to server capability please put <span style="color:#F00"><b>50 URLs max</b></span>. <br/> This tool will ignore
    50th+ URLs</p>

<br/><br/><br/>

<?php include "footer.php" ?>
