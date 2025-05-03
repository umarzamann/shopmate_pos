      <!-- Modal for adding a new user -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <form id="signupForm" action="save_user.php" method="POST">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 text-black" id="staticBackdropLabel">Add new user</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                              </div>

                              <!-- User Role Selection -->
                              <div class="mb-3">
                                <label class="form-label d-block text-dark fw-bold text-decoration-underline">Select Your Role:</label>
                                <div class="form-check form-check-inline text-dark ">
                                  <input class="form-check-input" type="radio" name="user_role" id="admin" value="1" required>
                                  <label class="form-check-label" for="admin">Admin</label>
                                </div> <br>
                                <div class="form-check form-check-inline text-dark ">
                                  <input class="form-check-input" type="radio" name="user_role" id="receptionist" value="2">
                                  <label class="form-check-label" for="receptionist">Receptionist</label>
                                </div>
                              </div>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
