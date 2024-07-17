import emailjs from "@emailjs/browser";

import { useRef, useState } from "react";
import style from "./Contact.module.css";
import { themeContext } from "../component/Context";
import React, { useContext } from "react";

const Contact = () => {
  const theme = useContext(themeContext);
  const darkMode = theme.state.darkMode;
  const formRef = useRef(null);
  const [form, setForm] = useState({ name: "", email: "", message: "" });
  // const { alert, showAlert, hideAlert } = useAlert();
  const [loading, setLoading] = useState(false);
  const [currentAnimation, setCurrentAnimation] = useState("idle");

  const handleChange = (e) => {
    setForm({ ...form, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    setLoading(true);

    emailjs
      .send(
        import.meta.env.VITE_APP_EMAILJS_SERVICE_ID,
        import.meta.env.VITE_APP_EMAILJS_TEMPLATE_ID,
        {
          from_name: form.name,
          to_name: "tsion",
          from_email: form.email,
          to_email: "tsibeyeu@gmail.com",
          message: form.message,
        },
        import.meta.env.VITE_APP_EMAILJS_PUBLIC_KEY
      )
      .then(() => {
        setLoading(false);
      })
      .catch((error) => {
        setLoading(false);
        console.error(error);
      });
  };

  return (
    <section className={style.section}>
      {/* {alert.show && <Alert {...alert} />} */}

      <div className={style.contact}>
        <h1>Get in Touch</h1>

        <form ref={formRef} onSubmit={handleSubmit} className={style.form} >
          <label>
            Name
            <input
              type="text"
              name="name"
              className="input"
              placeholder="Name"
              required
              value={form.name}
              onChange={handleChange}
              style={{background:darkMode ? "#201d1d":"", }}
            />
          </label>
          <label>
            Email
            <input
              type="email"
              name="email"
              className="input"
              placeholder="example@gmail.com"
              required
              value={form.email}
              onChange={handleChange}
              style={{background:darkMode ? "#201d1d":"", }}
            />
          </label>
          <label>
            Your Message
            <textarea
              name="message"
              rows="4"
              className="textarea"
              placeholder="Write your thoughts here..."
              value={form.message}
              onChange={handleChange}
              style={{background:darkMode ? "#201d1d":"", }}
            />
          </label>

          <button
            type="submit"
            disabled={loading}
            className={style.btn}
            // onFocus={handleFocus}
            // onBlur={handleBlur}
          >
            {loading ? "Sending..." : "Submit"}
          </button>
        </form>
      </div>

      {/* <div className='lg:w-1/2 w-full lg:h-auto md:h-[550px] h-[350px]'>
        <Canvas
          camera={{
            position: [0, 0, 5],
            fov: 75,
            near: 0.1,
            far: 1000,
          }}
        >
          <directionalLight position={[0, 0, 1]} intensity={2.5} />
          <ambientLight intensity={1} />
          <pointLight position={[5, 10, 0]} intensity={2} />
          <spotLight
            position={[10, 10, 10]}
            angle={0.15}
            penumbra={1}
            intensity={2}
          />

          <Suspense fallback={<Loader />}>
            <Fox
              currentAnimation={currentAnimation}
              position={[0.5, 0.35, 0]}
              rotation={[12.629, -0.6, 0]}
              scale={[0.5, 0.5, 0.5]}
            />
          </Suspense>
        </Canvas>
      </div> */}
    </section>
  );
};

export default Contact;
