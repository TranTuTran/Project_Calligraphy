import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./components/Home/Home";
import Category from "./components/Blog/Category";
import Lesson from "./components/Blog/Lesson";
import Profile from "./components/Profile/Profile";

function Blog() {
    return <h1>Blog Page</h1>;
}

function App() {
    return (
        <Router>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/blog/:slug" element={<Category />} />
                <Route path="/lesson" element={<Lesson />} />
                <Route path="/profile" element={<Profile />} />
            </Routes>
        </Router>
    );
}

ReactDOM.createRoot(document.getElementById("app")).render(<App />);
