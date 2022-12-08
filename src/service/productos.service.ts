import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs'
import { getLocaleCurrencyCode } from '@angular/common';

const URL = 'assets/data/productos.json';
@Injectable({
    providedIn: 'root'
})
export class  ProductoService {
    
      url="http://localhost/Ejercicio/";
    constructor(private http: HttpClient) {}
    mostrarTodos(){
        return this.http.get(this.url+"getall.php")
    }

      agregar(producto:string){
        return this.http.post(`${this.url}post.php`, JSON.stringify(producto));
      }
    }
