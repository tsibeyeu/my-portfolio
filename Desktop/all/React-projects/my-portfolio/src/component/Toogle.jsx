import React, { useContext } from 'react'
import { BiSun } from 'react-icons/bi'
import { BsMoon } from 'react-icons/bs'


import style from "./Toogle.module.css";
import { themeContext } from './Context';

const Toogle = () => {
  const theme=useContext(themeContext);
  const darkMode = theme.state.darkMode;
  function handleToggle(){
    theme.dispatch({type:"toogle"})
  }
  return (
    <div onClick={handleToggle} className={style.toogle}>
        <BsMoon />
        <BiSun />
        <div className={style.button} style={darkMode ? {left:"2px"}:{right:"2px"}}></div>
    </div>
  )
}

export default Toogle