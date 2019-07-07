import React from 'react';
import ReactDOM from 'react-dom';

import './alert-modal.css';

const AlertModal = ({modalToggleOff, onDelete, isOpen, deleteItem}) => isOpen ? ReactDOM.createPortal(
  <><div className="overlay">
      <div className="modal-dialog alert-modal" role="document">
          <div className="modal-content">
          <div className="modal-header">
              <h5 className="modal-title">Delete</h5>
          </div>
          <div className=" text-center modal-body">
              <p>Delete <b>{deleteItem}</b>?</p>
          </div>
          <div className="text-center mb-2">
              <button type="button" className="btn btn-secondary mr-2" data-dismiss="modal" onClick={() => modalToggleOff()}>Cancel</button>
              <button type="button" className="btn btn-primary" onClick={() => onDelete()}>OK</button>
          </div>
          </div>
      </div>
      </div> 
  </>, document.body
  ) : null;

  export default AlertModal;