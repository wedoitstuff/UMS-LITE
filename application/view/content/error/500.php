<base href = "<?= Config::get("URL"); ?>" />
<style>
    body {
        font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        background: #3973aa;
        color: #fefeff;
        height: 100vh;
        margin: 0;
    }

    #page {
        display: table;
        height: 100%;
        margin: 0 auto;
        margin-top: -10px;
        width: 70%;
        font-size: 1.9vw;
    }

    #container {
        display: table-cell;
        vertical-align: middle;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-weight: normal;
        padding: 0;
        margin: 25px 0;
        margin-top: 0;
        font-weight: 300;
    }

    h1 {
        font-size: 6.5em;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 1.5em;
    }

    h4 {
        font-size: 1.4em;
        line-height: 1.5em;
    }

    h5 {
        line-height: 1.1em;
        font-size: 1.3em;
    }

    #details {
        display: flex;
        flex-flow: row;
        flex-wrap: nowrap;
        padding-top: 10px;
    }

    #qr {
        flex: 0 1 auto;
    }

    #image {
        background: white;
        padding: 5px;
        line-height: 0;
    }

    #image img {
        width: 9.8em;
        height: 9.8em;
    }

    #stopcode {
        padding-left: 10px;
        flex: 1 1 auto;
    }

    @media (min-width: 840px) {
        #page {
            font-size: 140%;
            width: 800px;
        }
    }
</style>
<title>500 Server Error</title>
<div id="page">
    <div id="container">
        <h1>:(</h1>
        <h2><?= Config::get("URL"); ?> is currently unable to handle this request. We're just collecting some error info, and then we'll reload for
            you.</h2>
        <h2>
            <span id="percentage">0</span>% complete</h2>
        <div id="details">
            <div id="qr">
                <div id="image">
                    <img src="https://i.imgur.com/SJTaDZb.png" alt="QR Code" />
                </div>
            </div>
            <div id="stopcode">
                <h4>For more information about this issue and possible fixes, visit
                    <?= Config::get("URL"); ?>support</h4>
                <h5>If you call a support person, give them this info:
                    500_INTERNAL_SERVER_ERROR</h5>
            </div>
        </div>
    </div>
</div>
<script>
    var percentageElement = document.getElementById("percentage");
    var percentage = 0;

    function process() {
        percentage += parseInt(Math.random() * 10);
        if (percentage > 100) {
            percentage = 100;
            window.location.replace('dashboard');
        }
        percentageElement.innerText = percentage;
        processInterval();
    }

    function processInterval() {
        setTimeout(process, Math.random() * (1000 - 500) + 500)
    }
    processInterval();
</script>