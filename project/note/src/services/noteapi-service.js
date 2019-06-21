import React, { Component } from 'react';

export default class NoteapiService {
  getNotes = async () => {
    const res = await fetch('http://wdb.virtual/project/php/get-note.php');
      return await res.json();
    }
}
