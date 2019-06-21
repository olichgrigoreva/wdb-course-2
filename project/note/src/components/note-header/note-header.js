import React from 'react';
//import './note-header.css';

const NoteHeader = () => {
  return (
    <div className ="note-header">
      <header className="row">
        <div className="col text-center">
          <h5>NOTEBOOK</h5>
            <span><a href="http://wdb.virtual/project/profile/dist/index.html">Profile</a></span>
              |
            <span><a href="http://wdb.virtual/project/login/index.php">Logout</a></span>
        </div>
      </header>
    </div>
  );
};

export default NoteHeader;
