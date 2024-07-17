import React from "react";
import { Link } from "react-router-dom";

const CTA = () => {
  return (
    <section className=" flex justify-center items-center flex-col">
      <p className="text-slate-500 font-medium ">
        Have a project in mind ? <br className="sm:block hidden" />
        Let's bulid something together!
      </p>
      <Link className="btn" to="/contact">Contact Me</Link>
    </section>
  );
};

export default CTA;
