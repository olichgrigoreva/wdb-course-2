import React from 'react';
import './note-header.css';

const NoteHeader = () => {
  return (
    <div className ="container-fluid note-header">
        <header className="container-fluid row">
            <div className="col text-center">
                <h1>NOTEBOOK</h1>
                <span><a href="http://wdb.virtual/wdb-course-2/Notebook/Profile/profile.html">Profile</a></span>
                |
                <span><a href="http://wdb.virtual/wdb-course-2/Notebook/Login/login.php">Logout</a></span>
            </div>
        </header>
    </div>
  );
};

export default NoteHeader;
