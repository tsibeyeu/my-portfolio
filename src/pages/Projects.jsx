import React, { useContext } from "react";
import { themeContext } from "../component/Context";
import "react-vertical-timeline-component/style.min.css";
import { UseFetchProject } from "../component/fetchprojects";
import style from "./Project.module.css";
import { Link } from "react-router-dom";
import ErrorMessage from "../component/ErrorMessage.jsx";
import Loader from "../component/Loader.jsx";

const Projects = () => {
  const { error,loading, project } = UseFetchProject();
  const theme = useContext(themeContext);
  const darkMode = theme.state.darkMode;

  return (
    <section className={style.section}>
      <h1 className>
        My
        <span className={style.name}>Projects</span>
      </h1>
      <div className={style.info}>
        <p>
          Welcome to my project showcase! Here, I am thrilled to present a
          collection of my latest creations that showcase my passion for
          software development and design. Each project represents a unique
          journey of learning, creativity, and problem-solving. From building
          interactive web applications to crafting elegant user interfaces,
          every project reflects my dedication to delivering innovative
          solutions and exceeding expectations. Explore these projects to see
          how I combine technical expertise with a creative mindset to bring
          ideas to life and make a meaningful impact in the digital world.
        </p>
      </div>
      
  
 
{loading && <Loader />}
          {!loading && !error && (
            <div className={style.projectCenter}>
            {project.map(({ id, img, title, url }) => (
                <a key={id} href={url} target="_blank" rel="noreferrer" className={style.project}><img className={style.img} src={img}  alt={title} />
                <h5>{title}</h5>
                </a>
              ))}
              </div>
          )}
          {error && <ErrorMessage message={error} />}
      
       

      <p  className={style.contact} style={{color:darkMode ? "#fff":"", }} >
        Have a project in mind ? <br  />
        Let's bulid something together!
      </p>
      <Link className={style.btn} to="/contact">Contact Me</Link>
    </section>
  );
};

 {/* <h3 >From Ethiopia <span>ET</span> </h3> */}

export default Projects;
