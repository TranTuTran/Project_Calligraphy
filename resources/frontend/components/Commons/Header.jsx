import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";

export default function Header(options) {
    const [nationals, setNationals] = useState([]);
    const [loading, setLoading] = useState(true);
    useEffect(() => {
        fetch('http://127.0.0.1:8000/api/get-nationals')
            .then((response) => {
                if (!response.ok) {
                throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then((data) => {
                setNationals(data);
                setLoading(false);
            })
            .catch((error) => {
                setError(error);
                setLoading(false);
            });
    }, [])

    return (
        <>
            <div id="sticky-header" className="lavewell_nav_manu style-2">
                <div className="container-fluid">
                    <div className="row d-flex align-items-center">
                        <div className="col-lg-2">
                            <div className="logo cursor-scale">
                                <Link
                                    to="/"
                                    className="logo_img"
                                    title="lavewell"
                                >
                                    <img
                                        width={200}
                                        src="/logo.png"
                                        alt="logo"
                                    />
                                </Link>
                                <Link
                                    to="/"
                                    className="main_sticky"
                                    title="lavewell"
                                >
                                    <img
                                        width={200}
                                        src="logo.png"
                                        alt="astute"
                                    />
                                </Link>
                            </div>
                        </div>
                        <div className="col-lg-8">
                            <nav className="lavewell_menu">
                                <ul className="nav_scroll">
                                    <li>
                                        <Link to="/" className="cursor-scale">
                                            Home
                                        </Link>
                                    </li>
                                    <li>
                                        <a className="cursor-scale" href="#">
                                            Learn Caligraphy
                                        </a>
                                        <ul className="sub-menu">
                                            {
                                                nationals.map((national) => (
                                                    <li key={national.id}>
                                                        <Link to={`/blog/${national.slug}`} className="cursor-scale">
                                                         {national.name}
                                                        </Link>
                                                    </li>
                                                ))
                                            }
                                        </ul>
                                    </li>
                                    <li>
                                        <a className="cursor-scale" href="#">
                                            User
                                        </a>
                                        <ul className="sub-menu">
                                            <li>
                                                <Link
                                                    to="/profile"
                                                    className="cursor-scale"
                                                >
                                                    Profile
                                                </Link>
                                            </li>
                                            <li>
                                                <Link
                                                    to="/practice"
                                                    className="cursor-scale"
                                                >
                                                    Practice
                                                </Link>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <Link
                                            to="/network"
                                            className="cursor-scale"
                                        >
                                            Network
                                        </Link>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div className="col-lg-2">
                            <div class="header-btn">
                                <a href="/logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
