import React from "react";
import { BrowserRouter as Router, Switch,Route,Link } from "react-router-dom";

const AppContainer =({title,children}) =>{
    return( 
        <div className="container">
          <div className="card">
            <h5 className="card-header">{title}</h5>
            <div className="card-body">
               {children}
            </div>
          </div>
        </div>
    );
};

export default AppContainer;