import React from "react";

export default function Section2() {
  return (
    <>
      <div className="service-section">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div className="section-title text-center cursor-scale">
                <div className="section-sub-title">
                  <h5>OUR PROGRAM</h5>
                </div>
                <div className="section-main-title cursor-scale">
                  <h3>East Asian Calligraphy</h3>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-lg-4 col-md-6">
              <div className="service-single-box">
                <div className="service-thumb">
                  <img src="theme/images/caligraphy/5.jpg" alt="thumb" />
                </div>
                <div className="service-content cursor-scale">
                  <h1 className="service-title">
                    <a href="service-details.html">Chinese Calligraphy</a>
                  </h1>
                  <h5 className="service-sub-title">Chinese characters</h5>
                </div>
              </div>
            </div>
            <div className="col-lg-4 col-md-6">
              <div className="service-single-box">
                <div className="service-thumb">
                  <img src="theme/images/caligraphy/7.jpg" alt="thumb" />
                </div>
                <div className="service-content cursor-scale">
                  <h1 className="service-title">
                    <a href="service-details.html">Japanese Calligraphy</a>
                  </h1>
                  <h5 className="service-sub-title">Shodo</h5>
                </div>
              </div>
            </div>
            <div className="col-lg-4 col-md-6">
              <div className="service-single-box">
                <div className="service-thumb">
                  <img src="theme/images/caligraphy/5.jpg" alt="thumb" />
                </div>
                <div className="service-content cursor-scale">
                  <h1 className="service-title">
                    <a href="service-details.html">Korean Calligraphy</a>
                  </h1>
                  <h5 className="service-sub-title">Seoye</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </>
  )
}