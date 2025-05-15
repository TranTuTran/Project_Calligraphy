import React from "react";
import Header from "../commons/Header";
import Footer from "../Commons/Footer";
export default function Login () {
  return (
    <>
      <Header />
      <div className="contact-section">
        
        <div className="row justify-content-center">
          <div className="col-md-4">
            <div className="card">
              <div className="card-header">
                <ul className="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link active"
                      id="login-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#login"
                      type="button"
                      role="tab"
                      aria-controls="login"
                      aria-selected="true"
                    >
                      Login
                    </button>
                  </li>
                  <li className="nav-item" role="presentation">
                    <button
                      className="nav-link"
                      id="register-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#register"
                      type="button"
                      role="tab"
                      aria-controls="register"
                      aria-selected="false"
                    >
                      Register
                    </button>
                  </li>
                </ul>
              </div>
              <div className="card-body">
                <div className="tab-content" id="myTabContent">
                  {/* Login Form */}
                  <div
                    className="tab-pane fade show active"
                    id="login"
                    role="tabpanel"
                    aria-labelledby="login-tab"
                  >
                    <form>
                      <div className="mb-3">
                        <label htmlFor="login-email" className="form-label">
                          Email address
                        </label>
                        <input
                          type="email"
                          name="email"
                          className="form-control"
                          id="login-email"
                          placeholder="Enter email"
                        />
                      </div>
                      <div className="mb-3">
                        <label htmlFor="login-password" className="form-label">
                          Password
                        </label>
                        <input
                          type="password"
                          name="password"
                          className="form-control"
                          id="login-password"
                          placeholder="Enter password"
                        />
                      </div>
                      <div className="submit-button">
                        <button type="submit">Login</button>
                      </div>
                    </form>
                  </div>
                  {/* Register Form */}
                  <div
                    className="tab-pane fade"
                    id="register"
                    role="tabpanel"
                    aria-labelledby="register-tab"
                  >
                    <form>
                      <div className="mb-3">
                        <label htmlFor="register-name" className="form-label">
                          Full Name
                        </label>
                        <input
                          type="text"
                          name="name"
                          className="form-control"
                          id="register-name"
                          placeholder="Enter full name"
                        />
                      </div>
                      <div className="mb-3">
                        <label htmlFor="register-email" className="form-label">
                          Email address
                        </label>
                        <input
                          type="email"
                          name="email"
                          className="form-control"
                          id="register-email"
                          placeholder="Enter email"
                        />
                      </div>
                      <div className="mb-3">
                        <label htmlFor="register-password" className="form-label">
                          Password
                        </label>
                        <input
                          type="password"
                          name="password"
                          className="form-control"
                          id="register-password"
                          placeholder="Enter password"
                        />
                      </div>
                      <div className="mb-3">
                        <label htmlFor="register-password-confirm" className="form-label">
                          Confirm Password
                        </label>
                        <input
                          type="password"
                          name="password_confirmation"
                          className="form-control"
                          id="register-password-confirm"
                          placeholder="Confirm password"
                        />
                      </div>
                      <div className="submit-button">
                        <button type="submit">Register</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </>
  )
}