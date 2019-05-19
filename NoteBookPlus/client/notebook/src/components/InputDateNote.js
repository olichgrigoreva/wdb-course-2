import React from 'react';
import './InputDateNote.css';

const InputDateNote = () => {
  return (
    <form>
       <input className = "form-control input-background" type="date" name="calendar" value = ""
        max="2099-12-31" min="1980-01-01" />
    </form>
  );
};

export default InputDateNote;
