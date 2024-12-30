import React from "react";

export default function Section3(props) {
  return (
    <>
      <div className="wedding-event-area">
        <div className="container-fluid">
          <div className="row">
            <div className="col-lg-12">
              <div className="section-title text-center cursor-scale">
                <div className="section-sub-title">
                  <h5>Tools of the Trade</h5>
                </div>
                <div className="section-main-title cursor-scale">
                  <h1>Learning Calligraphy</h1>
                </div>
              </div>
            </div>
          </div>
          <div className="row wedding-box align-items-center">
            <div className="col-lg-4">
              <div className="single-wedding-box cursor-scale">
                <div className="wedding-number">
                  <span>01</span>
                </div>
                <div className="wedding-title">
                  <h1>Tools of the Trade</h1>
                </div>
                <div className="wedding-desc">
                  <p>
                    There are many calligraphic styles, each with its own distinct
                    flair and origins. Some of the most prominent styles include
                  </p>
                </div>
              </div>
              <div className="row">
                <div className="col-lg-12">
                  <div className="single-wedding-box last-child cursor-scale">
                    <div className="wedding-number">
                      <span>02</span>
                    </div>
                    <div className="wedding-title">
                      <h1>Tools of the Trade</h1>
                    </div>
                    <div className="wedding-desc">
                      <p>
                        There are many calligraphic styles, each with its own distinct
                        flair and origins. Some of the most prominent styles include
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="swiper wedding-active">
                <div className="swiper-wrapper">
                  <div className="swiper-slide">
                    <div className="wedding-thumb">
                      <img
                        src="theme/images/caligraphy/4.png"
                        width={450}
                        alt="thumb"
                      />
                    </div>
                  </div>
                  <div className="swiper-slide">
                    <div className="wedding-thumb">
                      <img
                        src="theme/images/caligraphy/4.png"
                        width={450}
                        alt="thumb"
                      />
                    </div>
                  </div>
                </div>
                <div className="lavewell-wedding-arrow-box">
                  <button
                    className="wedding-prev"
                    tabIndex={0}
                    aria-label="Previous slide"
                  >
                    <i className="fa-solid fa-chevron-left" />
                  </button>
                  <button
                    className="wedding-next"
                    tabIndex={0}
                    aria-label="Next slide"
                  >
                    <i className="fa-solid fa-chevron-right" />
                  </button>
                </div>
              </div>
            </div>
            <div className="col-lg-4 pl-0">
              <div className="single-wedding-box box-2 cursor-scale">
                <div className="wedding-number">
                  <span>03</span>
                </div>
                <div className="wedding-title">
                  <h1>The History of Calligraphy</h1>
                </div>
                <div className="wedding-desc">
                  <p>
                    There are many calligraphic styles, each with its own distinct
                    flair and origins. Some of the most prominent styles include
                  </p>
                </div>
              </div>
              <div className="row">
                <div className="col-lg-12">
                  <div className="single-wedding-box box-2 last-child cursor-scale">
                    <div className="wedding-number">
                      <span>04</span>
                    </div>
                    <div className="wedding-title">
                      <h1>Party with Music</h1>
                    </div>
                    <div className="wedding-desc">
                      <p>
                        There are many calligraphic styles, each with its own distinct
                        flair and origins. Some of the most prominent styles include
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* <div class="wedding-shape">
        <img src="theme/images/home-1/wedding-shape.png" alt="shape">
      </div>
      <div class="wedding-shape2">
        <img src="theme/images/home-1/wedding-shape2.png" alt="shape">
      </div> */}
        </div>
      </div>
    </>
  )
}
