import React from 'react';
import ReactDOM from 'react-dom';
import api from '../api';

function Cards() {
    return (
        <div className="card draggable shadow-sm" id="cd1" draggable="true" ondragstart="drag(event)">
                                <div className="card-body p-2">
                                    <div className="card-title">
                                       
                                        <a href="" className="lead font-weight-light">TSK-154</a>
                                    </div>
                                    <p> This is a description of a item on the board. </p>
                                    <button className="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
        );
};

export default Cards;


