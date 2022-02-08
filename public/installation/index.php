<!DOCTYPE html>
<html lang="en">
<head>
  <title>UMS PRO Installation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="installation/styles.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-4 bg-image"></div>
      <div class="col-md-8 col-lg-8">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="col-md-6 mx-auto">
              <form id="regForm" action = "" method = "POST" name = "theForm">
                <h1 id="register">Install</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">

                  <p><input type="text" placeholder="Site Name" oninput="this.className = ''" name="siteName"></p>
                  <p><input type="email" placeholder="Site Email" oninput="this.className = ''" name="siteEmail"></p>
                </div>
                <div class="tab">
                  <div class = 'row'>
                    <div class = 'col-9'>
                      <p><input placeholder="Database Host" oninput="this.className = ''" name="dbHost"></p>
                    </div>
                    <div class = 'col'>
                      <p><input type = "number" placeholder="Port" oninput="this.className = ''" name="dbPort" value = "3306"></p>
                    </div>
                  </div>
                  <p><input placeholder="Database User" oninput="this.className = ''" name="dbUser"></p>
                  <p><input type = "password" placeholder="Database Password" oninput="this.className = ''" name="dbPass"></p>
                  <p><input placeholder="Database Name" oninput="this.className = ''" name="dbName"></p>
                  <hr>
                  <p><input placeholder="SMTP Host" oninput="this.className = ''" name="smtpHost"></p>
                  <p><input type = "email" placeholder="SMTP Email" oninput="this.className = ''" name="smtpEmail"></p>
                  <div class = 'row'>
                    <div class = 'col-9'>
                      <p><input type = "password" placeholder="SMTP Password" oninput="this.className = ''" name="smtpPass"></p>
                    </div>
                    <div class = 'col'>
                      <p><input type = "number" placeholder="Port" oninput="this.className = ''" name="smtpPort" value = "465"></p>
                    </div>
                  </div>
                  <p><input type = "email" placeholder="SMTP From Email" oninput="this.className = ''" name="fromEmail"></p>


                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                  <h3>Looking good!</h3> <span>After the installation is complete use: <br> USERNAME: <strong>demo</strong> <br> PASSWORD: <strong>12345678</strong><br>to login</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                  <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="installation/scripts.js"></script>
  </body>
  </html>
