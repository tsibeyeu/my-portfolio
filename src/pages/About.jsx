import {
  VerticalTimeline,
  VerticalTimelineElement,
} from "react-vertical-timeline-component";
import "react-vertical-timeline-component/style.min.css";
import {skills,experiences} from "../component/datas/data";
import style from "./About.module.css";

const About = () => {
  return (
    <section className={style.section}>
      <h1 className>
        Hello I'm{" "}
        <span className={style.name} >
          Tsion
        </span>
      </h1>
      <div className={style.info}>
        <p>
          curious learner and creative team player, interesting in the job role
          of Software Engineer . where I can utilise my understanding of coding
          and software development to efficiently fulfill the requirements of
          clients and customers.
        </p>
      </div>
      <div className={style.skillscontiner}>
        <h3 > My Skills</h3>
        <div className={style.skill}>
          {skills.map((skill) => (
            <div  className={style.blockcontiner}>
              <div  />
              <div className={style.imgskill}>
                <img
                  src={skill.imageUrl}
                  alt={skill.name}
                  className={style.img}
                />
              </div>
            </div>
          ))}
        </div>
      </div>
      <div className={style.experincecontiner}>
        <h3 > Some Work Experience</h3>
        <div className={style.experinceinfo}>
          I've been leveling up my skills and teaming up with smart people by
          implementing different project using Frontend and Backend skills.some
          of my experience Here's the rundown:
        </div>
        <div className={style.verticalline} >
          <VerticalTimeline>
            {experiences.map((experience) => (
              <VerticalTimelineElement
                // date={experience.date}
                icon={
                  <div className={style.experinceLine}>
                    <img
                      
                      src={experience.icon}
                      alt={experience.icon}
                    />
                  </div>
                }
                iconStyle={{ background: experience.iconBg }}
                contentStyle={{
                  borderBottom: "8px",
                  borderBottomColor: experience.iconBg,
                  borderBottomStyle: "solid",
                  boxShadow: "none",
                }}
              >
                <div>
                  <h3 className={style.experincetitle}>
                    {experience.title}
                  </h3>
                  <p></p>
                </div>
                <ul className={style.points}>
                  {experience.points.map((point, index) => (
                    <li
                      key={index}
                      
                    >
                      {point}
                    </li>
                  ))}
                </ul>
              </VerticalTimelineElement>
            ))}
          </VerticalTimeline>
        </div>
      </div>
      <hr className="border-slate-100 shadow"/>
{/* <CTA/> */}
    </section>
  );
};

export default About;
