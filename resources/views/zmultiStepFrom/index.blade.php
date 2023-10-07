<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <form action="process.php" method="post" class="form">
      <!-- Progress Bar -->
      <div class="progress-bar">
        <div class="progress" id="progress"></div>
        <div class="progress-step active" data-title="Personal"></div>
        <div class="progress-step" data-title="Contact "></div>
        <div class="progress-step" data-title="Experiences"></div>
        <div class="progress-step" data-title="Links"></div>
      </div>

      <!-- Steps -->
      <div class="form-step active">
        <h3>Personal Informations</h3>
        <div class="input-group">
          <label for="full-name">Full Name</label>
          <input type="text" name="full-name" id="full-name" />
        </div>
        <div class="input-group">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
        <div class="input-group">
          <label for="birth-date">Birth Date</label>
          <input type="date" name="birth-date" id="birth-date" />
        </div>
        <div class="">
          <a class="btn btn-next">Next</a>
        </div>
      </div>

      <!-- <div class="form-step">
        <h3>Contact Informations</h3>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" />
        </div>
        <div class="input-group">
          <label for="phone">Phone Number</label>
          <input type="phone" name="phone" id="phone" />
        </div>
        <div class="input-group">
          <label for="summary">Profile Summary</label>
          <textarea name="summary" id="summary" cols="30" rows="6"></textarea>
        </div>
        <div class="btn-group">
          <a class="btn btn-prev">Previous</a>
          <a class="btn btn-next">Next</a>
        </div>
      </div> -->

      <div class="form-step">
        <h3>Experiences</h3>
        <div class="experiences-group">
          <div class="experience-item">
            <div class="input-group">
              <label for="title">Company name</label>
              <input type="text" name="job-title[]" id="job-title" />
            </div>
            <div class="input-group">
              <label for="start-date">Start date</label>
              <input type="date" name="start-date[]" id="start-date" />
            </div>
            <div class="input-group">
              <label for="end-date">End date</label>
              <input type="date" name="end-date[]" id="end-date" />
            </div>
            <div class="input-group">
              <label for="job-description">Description</label>
              <textarea
                name="job-description[]"
                id="job-description"
                cols="30"
                rows="6"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="add-experience">
          <a class="add-exp-btn"> + Add Experience</a>
        </div>
        <div class="btn-group">
          <a class="btn btn-prev">Previous</a>
          <a class="btn btn-next">Next</a>
        </div>
      </div>

      <div class="form-step">
        <h3>Social Links</h3>
        <div class="input-group">
          <label for="linkedin">LinkedIn</label>
          <div class="input-box">
            <span class="prefix">linkedin.com/in/</span>
            <input
              id="linkedin"
              name="linkedin"
              type="text"
              placeholder="USER123"
            />
          </div>
        </div>
        <div class="input-group">
          <label for="twitter">Twitter</label>
          <div class="input-box">
            <span class="prefix">twitter.com/</span>
            <input
              id="twitter"
              name="twitter"
              type="text"
              placeholder="USER123"
            />
          </div>
        </div>
        <div class="input-group">
          <label for="github">Github</label>
          <div class="input-box">
            <span class="prefix">github.com/</span>
            <input
              id="github"
              name="facebook"
              type="text"
              placeholder="USER123"
            />
          </div>
        </div>
        <div class="btn-group">
          <a class="btn btn-prev">Previous</a>
          <input
            type="submit"
            value="Complete"
            name="complete"
            class="btn btn-complete"
          />
        </div>
      </div>
    </form>
    <script src="script.js" defer></script>
  </body>
</html>
