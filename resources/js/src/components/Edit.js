import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

function Edit() {
    return (
      <AppContainer title="Editar Tarea">
          <form>
              <div className='form-group'>
                  <label>Titulo</label>
                  <input className='form-control' type='text'/>
              </div>
              <div className='form-group'>
                  <label>Descripcion</label>
                  <textarea className='form-control'></textarea>
              </div>
              <div className='form-group'>
                  <button type='button' className='btn btn-success'>Editar</button>
              </div>
          </form>

      </AppContainer>
    );
}

export default Edit;