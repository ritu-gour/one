<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Seting</title>

    <!-- bootstrap css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <style>
      @media only screen and (max-width: 640px) {
        .hr1 {
          margin-top: 50px;
          background-color: blue;
        }
      }
    </style>
  </head>
  <body>
    <h4 class="display-4 text-center mt-5">Profile Setting</h4>
    <hr />

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img
            src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4"
            class="mx-auto d-block rounded-circle"
            height="175"
            width="175"
            alt=""
          />
          <form action="#">
            <label for="img" class="text-center">Change Image</label>
            <input type="file" id="img" name="img" accept="image/*" />
            <input type="submit" class="mt-2" />
          </form>
        </div>

        <div class="col-sm-6 mb-4">
          <hr class="hr1" />
          <form action="#">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter Your Name"
              />
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input
                type="text"
                class="form-control"
                id="phone"
                placeholder="First Phone Number"
              />
            </div>
            <div class="form-group">
              <label for="phone2">Phone 2</label>
              <input
                type="text"
                class="form-control"
                id="phone2"
                placeholder="Second Phone Number"
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Enter your Email"
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Bhai maan ke to delete kar dena esko"
              />
            </div>

            <div class="form-group">
              <label for="city">City</label>
              <input
                type="text"
                class="form-control"
                id="city"
                placeholder="Enter your City"
              />
            </div>
            <div class="form-group">
              <label for="area">Area</label>
              <input
                type="text"
                class="form-control"
                id="area"
                placeholder="Enter your Area"
              />
            </div>
            <div class="form-group">
              <label for="street">Street</label>
              <input
                type="text"
                class="form-control"
                id="street"
                placeholder="Enter your Street"
              />
            </div>
            <div class="form-group">
              <label for="house">House</label>
              <input
                type="text"
                class="form-control"
                id="house"
                placeholder="Enter your House Name"
              />
            </div>

            <button class="btn btn-success">Update Profile</button>
          </form>
        </div>
      </div>
    </div>

    <!-- js and jquery  -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>