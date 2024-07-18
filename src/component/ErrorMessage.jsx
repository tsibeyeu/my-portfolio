import React from 'react'
import style from "../pages/Project.module.css";


const ErrorMessage = ({ message }) => {
  return (
    <span className={style.error}>{ message }</span>
  )
}

export default ErrorMessage