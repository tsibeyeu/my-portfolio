import style from "./Home.module.css";
import { programmer } from "../component/images";
import { FaGithub, FaLinkedin, FaTwitter } from "react-icons/fa";
import React, { useContext } from "react";
import { themeContext } from "../component/Context";
import About from "./About";

const Home = () => {
  const theme = useContext(themeContext);
  const darkMode = theme.state.darkMode;
  return (
    <div>
      <main className={style.main}>
        <div className={style.left}>
          <h1> I'm Tsion</h1>
          <h2 style={{ color: darkMode ? "#fff" : "" }}>
            Full Stack Developer
          </h2>

          <p>turning idea into interactive reality</p>
          <div className={style.link}>
            <a style={{ color: "#345" }} href="https://github.com/tsibeyeu">
              {" "}
              <FaGithub />
            </a>
            <a
              style={{ color: "#345" }}
              href="https://www.linkedin.com/in/tsion-beyene-10202b2b1"
            >
              <FaLinkedin />
            </a>
            <a style={{ color: "#345" }} href="https://x.com/TsionBeye">
              <FaTwitter />
            </a>
          </div>
          <a
            className={style.btn}
            href="Tsion Resume.pdf"
            target="_blank"
            download
          >
            download cv
          </a>
        </div>
        <div className={style.right}>
          <img src={programmer} alt="hero-image" />
          <div className="blur"></div>
        </div>
        {/* <About/> */}
        {/* <span className="animate-bounce "><  FaArrowAltCircleDown /></span> */}
      </main>
    </div>
  );
};

export default Home;
