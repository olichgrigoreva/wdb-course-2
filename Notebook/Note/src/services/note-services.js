import { async } from "q";
import axios from 'axios';

export default class NoteService {

  _apiBase = 'http://wdb.virtual/wdb-course-2/Notebook/Api/';

  getNotes = async(url) => {
    const res = await axios.get(`${this._apiBase}${url}`);

    return res.data;
  };

  sendResource = async(url, data) => {
    axios.post(`${this._apiBase}${url}`, data);
  }
}
