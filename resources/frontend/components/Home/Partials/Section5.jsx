import React from "react";

export default function Section5(props) {
  return (
    <>
      <div className="coutner-area style-2">
        <div className="container">
          <div className="row counter-2">
            <div className="col-lg-3 col-md-6 col-sm-6">
              <div className="counter-single-box cursor-scale">
                <div className="odometer-wrapper counter-box-title" data-count={200}>
                  <h1 className="odometer" />
                  <h1 className="count-text">+</h1>
                </div>
                <div className="counter-desc">
                  <p>Team Member</p>
                </div>
              </div>
            </div>
            <div className="col-lg-3 col-md-6 col-sm-6">
              <div className="counter-single-box cursor-scale">
                <div className="odometer-wrapper counter-box-title" data-count={25}>
                  <h1 className="odometer" />
                  <h1 className="count-text">+</h1>
                </div>
                <div className="counter-desc">
                  <p>Winning award</p>
                </div>
              </div>
            </div>
            <div className="col-lg-3 col-md-6 col-sm-6">
              <div className="counter-single-box cursor-scale">
                <div className="odometer-wrapper counter-box-title" data-count={15}>
                  <h1 className="odometer" />
                  <h1 className="count-text">k</h1>
                </div>
                <div className="counter-desc">
                  <p>Complete projects</p>
                </div>
              </div>
            </div>
            <div className="col-lg-3 col-md-6 col-sm-6">
              <div className="counter-single-box cursor-scale">
                <div className="odometer-wrapper counter-box-title" data-count={12}>
                  <h1 className="odometer" />
                  <h1 className="count-text">k</h1>
                </div>
                <div className="counter-desc">
                  <p>Client review</p>
                </div>
              </div>
            </div>
          </div>
          {/* <div class="counter-shape">
              <img src="theme/images/home-1/ser-shape.png" alt="shape">
          </div>
          <div class="counter-shape2">
            <img src="theme/images/home-1/ser-shape2.png" alt="shape">
        </div> */}
        </div>
      </div>

    </>
  )
}