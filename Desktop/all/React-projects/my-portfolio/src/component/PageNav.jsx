import React from "react";
import { Link, NavLink } from "react-router-dom";
import style from "../component/PageNav.module.css";
import Toogle from "./Toogle";

const PageNav = () => {
  return (
    <header className={style.header}>
      <Link className={style.name} to="/">
        <p>TSI</p>
      </Link>
      <nav className={style.nav}>
        <ul>
          <li>
            <NavLink to="/about">About</NavLink>
            <NavLink to="/project">Project</NavLink>
            <NavLink to="/contact">Contact</NavLink>
            <Toogle />
          </li>
        </ul>
      </nav>
    </header>
  );
};

export default PageNav;
