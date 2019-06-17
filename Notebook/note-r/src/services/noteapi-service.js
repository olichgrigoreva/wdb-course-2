import React, { Component } from 'react';

export default class NoteapiService {
    getNotes = async () => {
        const res = await fetch('http://wdb.virtual/wdb-course-2/Notebook/Api/get_notes.php');

        return await res.json();
    }
}