import React,{useEffect,useState} from "react";
import { BrowserRouter as Router, Switch,Route,Link } from "react-router-dom";
import AppContainer from "./AppContainer";
import api from '../api';


const Home =() =>{
    const[tasks,setTasks]=useState(null);
    useEffect(()=>{
        api.getAllTasks().then(res =>{
            const result = res.data;
            setTasks(result.data)

        })
    },[])
    const renderTasks =() =>{
        if(!tasks){
            return(
                <tr key="{tasks.length}">
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
        return tasks.map((task,i) =>(
            <tr key={i}>
                    <td key={task.id}>{task.id}</td>
                    <td key={task.title}>{task.title}</td>
                    <td key={task.description}>{task.description}</td>
                    <td>
                        <Link className="btn btn-warning" to = {`/tasks/${task.id}`}>Editar</Link>
                        <button className="btn btn-danger" >Eliminar</button>
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
                    <tr key='yo'>
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