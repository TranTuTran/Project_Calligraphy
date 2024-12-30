import React from "react";

export default function BreadCrumb(options) {
  return (
    <>
      <div className="breadcumb-area">
        <div className="container">
          <div className="row">
            <div className="col-lg-12">
              <div className="breadcumb-content">
                <h4>Learn Caligraphy</h4>
                <ul className="breadcumb-list">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li className="list-arrow">&lt;</li>
                  <li>Learn caligraphy</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}