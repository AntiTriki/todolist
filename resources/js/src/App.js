import React from 'react';

import ReactDom from 'react-dom';

import {BrowserRouter as Router, Routes ,Route, Link} from 'react-router-dom';
import Home from "./components/Home";
import Add from "./components/Add";
import Edit from "./components/Edit";
import Delete from "./components/Delete";
const App =() =>{
    return( 
        <Router className="App__container">
            <Routes>
                <Route exact path="/" element={<Home />}></Route>
                <Route  path="/add" element={<Add />}></Route>
                <Route  path="/edit/:id" element={<Edit />}></Route>
            </Routes>
        </Router>
    );
};

ReactDom.render(<App/>, document.getElementById('app'));