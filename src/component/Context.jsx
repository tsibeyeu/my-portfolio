import React, { createContext, useReducer } from "react";
export const themeContext = createContext();
const initalTheme = { darkMode: false };
function themeReducer(state, action) {
  switch (action.type) {
    case "toogle":
      return {  darkMode: !state.darkMode };
    default:
      return state;
  }
}
export const ThemeProvider = (props) => {
  const [state, dispatch ] = useReducer(themeReducer, initalTheme);

  return (
    <themeContext.Provider value={{ state, dispatch }}>
      {props.children}
    </themeContext.Provider>
  );
};


