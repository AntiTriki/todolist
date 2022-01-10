import React, {useState} from 'react';
import ReactDOM from 'react-dom';
import { useNavigate } from "react-router-dom";
import AppContainer from './AppContainer';
import api from '../api';

const Add = ()=> {
    const history=useNavigate();
    const[loading, setLoading] = useState(false);
    const[title, setTitle] = useState('');
    const[description, setDescription] = useState('');
    const onAddSubmit= async() => {
        setLoading(true);
        try{
            await api.addTask({ title,description,})
            history.push('/');
        }
        catch{
            alert('Fallo al guardar');
        }finally{
            setLoading(false);
        }
    };
   
    return (
      <AppContainer title="Agregar Tarea">
          
          <form>
              <div className='form-group'>
                  <label>Titulo</label>
                  <input className='form-control' type='text' value={title} onChange={e=>setTitle(e.target.value)}/>
              </div>
              <div className='form-group'>
                  <label>Descripcion</label>
                  <textarea className='form-control' value={description} onChange={e=>setDescription(e.target.value)} ></textarea>
              </div>
              <div className='form-group'>
                  <button type='button' className='btn btn-success' onClick={onAddSubmit} disabled={loading}> {loading ? 'Loading..':'Agrega'}r</button>
              </div>
          </form>

      </AppContainer>
    );
}

export default Add;


