import React from 'react';

const CalendarNote = () => {
  return (
    <form>
       <input type="date" name="calendar" value = ""
        max="2099-12-31" min="1980-01-01" />
    </form>
  );
};

export default CalendarNote;
