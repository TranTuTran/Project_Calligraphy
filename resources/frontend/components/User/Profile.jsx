import React from "react";
import Header from "../commons/Header";
import Footer from "../Commons/Footer";
export default function Profile(props) {
    return (
        <>
            <Header />
            <div className="container mt-5">
  <div className="row">
    {/* Sidebar */}
    <div className="col-md-4">
        <div className="widget-sidber">
            <div className="widget-sidber-content">
                <h4>Student 0001</h4>
            </div>
            <div className="widget-category">
                <ul>
                <li>
                    <a href="#">
                    Your profile
                    <i className="bi bi-arrow-right" />
                    </a>
                </li>
                <li>
                    <a href="#">
                    Practice history
                    <i className="bi bi-arrow-right" />
                    </a>
                </li>
                <li>
                    <a href="#">
                    Logout
                    <i className="bi bi-arrow-right" />
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    {/* Main Content */}
    <div className="col-md-8">
        <div className="widget-sidber">
            <div className="widget-sidber-content">
                <h4>Profile</h4>
            </div>
            <div className="widget-category">
                
                
            
            <form>
            {/* Profile Picture */}
            <div className="mb-3 text-center">
              <label htmlFor="profile-picture" className="form-label">
                Profile Picture
              </label>
              <div className="d-flex justify-content-center">
                <img
                  src="https://via.placeholder.com/150"
                  alt="Profile Picture"
                  className="img-thumbnail mb-2"
                  style={{ width: 150, height: 150 }}
                />
              </div>
              <input
                className="form-control"
                type="file"
                id="profile-picture"
              />
            </div>
            {/* Name */}
            <div className="mb-3">
              <label htmlFor="user-name" className="form-label">
                Full Name
              </label>
              <input
                type="text"
                className="form-control"
                id="user-name"
                placeholder="Enter your full name"
                defaultValue="John Doe"
              />
            </div>
            {/* Email */}
            <div className="mb-3">
              <label htmlFor="user-email" className="form-label">
                Email Address
              </label>
              <input
                type="email"
                className="form-control"
                id="user-email"
                placeholder="Enter your email"
                defaultValue="john.doe@example.com"
              />
            </div>
            {/* Phone Number */}
            <div className="mb-3">
              <label htmlFor="user-phone" className="form-label">
                Phone Number
              </label>
              <input
                type="tel"
                className="form-control"
                id="user-phone"
                placeholder="Enter your phone number"
                defaultValue="123-456-7890"
              />
            </div>
            {/* Address */}
            <div className="mb-3">
              <label htmlFor="user-address" className="form-label">
                Address
              </label>
              <textarea
                className="form-control"
                id="user-address"
                rows={3}
                placeholder="Enter your address"
                defaultValue={"123 Main St, City, Country"}
              />
            </div>
            {/* Nationality */}
            <div className="mb-3">
              <label htmlFor="user-nationality" className="form-label">
                Nationality
              </label>
              <select className="form-select" id="user-nationality">
                <option selected="">Choose your nationality</option>
                <option value="us">United States</option>
                <option value="uk">United Kingdom</option>
                <option value="india">India</option>
                <option value="china">China</option>
                <option value="japan">Japan</option>
                <option value="other">Other</option>
              </select>
            </div>
            {/* Level */}
            <div className="mb-3">
              <label htmlFor="user-level" className="form-label">
                Level
              </label>
              <select className="form-select" id="user-level">
                <option selected="">Choose your level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
                <option value="expert">Expert</option>
              </select>
            </div>
            {/* Save Button */}
            <div className="text-center">
              <button type="submit" className="btn btn-success">
                Save Changes
              </button>
            </div>
          </form>
            
    </div>
            </div>
        </div>
      
  </div>
</div>
            <Footer />
        </>
    );
}