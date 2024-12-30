import React from "react";
import { Link } from 'react-router-dom';

export default function Content() {

  let posts = []
  for (let i = 0; i < 12; i++) {
    posts.push(
      <div className="col-lg-6 col-md-6" key={i}>
        <div className="blog-singele-box">
          <div className="blog-thumb">
            <img src="theme/images/caligraphy/5.jpg" alt="blog" />
            <div className="blog-content">
              <div className="blog-date">
                <span>June 8, 2024</span>
              </div>
              <h3 className="blog-title">
                <Link to={'/lesson'}>Flower Design</Link>
              </h3>
              <p className="blog-desc">
                There are many calligraphic styles, each with its own distinct flair
                and origins. Some of the most prominent styles include
              </p>
              <div className="blog-btn">
                <Link to={'/lesson'}>CLICK HERE</Link>
              </div>
            </div>
          </div>
          <div className="blog-meta-title">
            <h2>
              <Link to={'/lesson'}>We Love Passion</Link>
            </h2>
          </div>
        </div>
      </div>
    )
  }

  return (
    <>
      <div className="blog-area">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div className="section-title text-center cursor-scale">
                <div className="section-sub-title">
                  <h5>POST NEWS</h5>
                </div>
                <div className="section-main-title cursor-scale">
                  <h1>Caligraphy</h1>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-lg-8">
              <div className="row">
                
                {posts}

              </div>
            </div>
            <div className="col-lg-4">
              <div className="row">
                <div className="col-lg-12">
                  <div className="widget-sidber">
                    <div className="widget_search">
                      <form action="#" method="get">
                        <input
                          type="text"
                          name="s"
                          defaultValue=""
                          placeholder="Search Here"
                          title="Search for:"
                        />
                        <button type="submit" className="icons">
                          <i className="fa fa-search" />
                        </button>
                      </form>
                    </div>
                  </div>
                  <div className="widget-sidber">
                    <div className="widget-sidber-content">
                      <h4>Main Services</h4>
                    </div>
                    <div className="widget-category">
                      <ul>
                        <li>
                          <a href="#">
                            Business
                            <i className="bi bi-arrow-right" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Digital Agency
                            <i className="bi bi-arrow-right" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Introductions
                            <i className="bi bi-arrow-right" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Technologies
                            <i className="bi bi-arrow-right" />
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Parallax Effects
                            <i className="bi bi-arrow-right" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div className="widget-sidber">
                    <div className="widget-sidber-content">
                      <h4>Latest Posts</h4>
                    </div>
                    <div className="sidber-widget-recent-post">
                      <div className="recent-widget-thumb">
                        <img src="theme/images/inner/recent-post.png" alt="" />
                      </div>
                      <div className="recent-widget-content">
                        <a href="blog-details.html">
                          Top crypto exchange influencers
                        </a>
                        <p> feb, 26 2024</p>
                      </div>
                    </div>
                    <div className="sidber-widget-recent-post">
                      <div className="recent-widget-thumb">
                        <img src="theme/images/inner/recent-post2.png" alt="" />
                      </div>
                      <div className="recent-widget-content">
                        <a href="blog-details.html">
                          Necessity may give us best virtual court
                        </a>
                        <p> June, 15 2024</p>
                      </div>
                    </div>
                    <div className="sidber-widget-recent-post">
                      <div className="recent-widget-thumb">
                        <img src="theme/images/inner/recent-post3.png" alt="" />
                      </div>
                      <div className="recent-widget-content">
                        <a href="blog-details.html">
                          You should know about business plan
                        </a>
                        <p> april, 10 2024</p>
                      </div>
                    </div>
                  </div>
                  <div className="widget-sidber">
                    <div className="widget-sidber-content">
                      <h4>Tags</h4>
                    </div>
                    <div className="widget-catefories-tags">
                      <a href="#">Consulting</a>
                      <a href="#">Agency</a>
                      <a href="#">Business</a>
                      <a href="#">Digital</a>
                      <a href="#">Experience</a>
                      <a href="#">Technology</a>
                    </div>
                  </div>
                  <div className="sidebar__single sidebar__comments">
                    <h3 className="sidebar__title">Recent Comments</h3>
                    <ul className="sidebar__comments-list list-unstyled">
                      <li>
                        <div className="sidebar__comments-icon">
                          {" "}
                          <i className="fas fa-comments" />
                        </div>
                        <div className="sidebar__comments-text-box">
                          <p>
                            A wordpress commenter on <br />
                            launch new mobile app{" "}
                          </p>
                        </div>
                      </li>
                      <li>
                        <div className="sidebar__comments-icon">
                          {" "}
                          <i className="fas fa-comments" />{" "}
                        </div>
                        <div className="sidebar__comments-text-box">
                          <p>
                            {" "}
                            <span>John Doe</span> on template:
                          </p>
                          <h5>comments</h5>
                        </div>
                      </li>
                      <li>
                        <div className="sidebar__comments-icon">
                          {" "}
                          <i className="fas fa-comments" />{" "}
                        </div>
                        <div className="sidebar__comments-text-box">
                          <p>
                            A wordpress commenter on <br />
                            launch new mobile app{" "}
                          </p>
                        </div>
                      </li>
                      <li>
                        <div className="sidebar__comments-icon">
                          {" "}
                          <i className="fas fa-comments" />{" "}
                        </div>
                        <div className="sidebar__comments-text-box">
                          <p>
                            {" "}
                            <span>John Doe</span> on template:
                          </p>
                          <h5>comments</h5>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="call-to-action-area">
        <div className="container">
          <div className="row call-bg align-items-center">
            <div className="col-lg-9 col-md-8">
              <div className="call-action-content">
                <h5 className="call-action-title">FORM FILL-UP</h5>
                <h1 className="call-sub-title">Login to practice</h1>
              </div>
            </div>
            <div className="col-lg-3 col-md-4">
              <div className="call-action-btn">
                <a href="#">Getting started!</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </>
  )
}