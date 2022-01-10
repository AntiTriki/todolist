import React,{useEffect,useState} from "react";
import { BrowserRouter as Router, Switch,Route,Link } from "react-router-dom";
import AppContainer from "./AppContainer";
import api from '../api';
import { postCss } from "laravel-mix";

const Home =() =>{
    useEffect(()=>{
        api.getAllTasks().then(res =>{
            const result = res.data;
            setPosts(result.data)

        })
    },[])
    const renderTasks =() =>{
        if(!tasks){
            return(
                <tr>
                    <td colSpan="4">
                        Cargando tareas...
                    </td>
                </tr>
            )
        }
        if(tasks.length===0){
            return(
                <tr>
                    <td colSpan="4">
                        No hay tareas q mostrar aun, agregue uno
                    </td>
                </tr>
            )
        }
        return tasks.map((task) =>(
            <tr>
                    <td>{task.id}</td>
                    <td>{task.title}</td>
                    <td>{task.description}</td>
                    <td>
                        <link className="btn btn-warning" to = {`/tasks/${tarea.id}`}>Editar</link>
                        <button className="btn btn-warning" to = {`/tasks/${tarea.id}`}>Eliminar</button>
                    </td>
            </tr>
        ))
    }
    return( 
       <AppContainer title="React-Laravel">
            
            <Link to="/add" className="btn btn-primary">Agregar</Link>
            <div className="table-responsive">
            <table className="table table-striped mt-4">
                <thead> 
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody> 
                   {renderTasks()} 
                </tbody>


            </table>
            </div>
       </AppContainer>
    );
};

export default Home;