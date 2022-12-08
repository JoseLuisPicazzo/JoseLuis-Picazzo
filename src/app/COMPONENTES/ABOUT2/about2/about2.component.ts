import { Component, OnInit } from '@angular/core';
import { ProductoService } from 'src/service/productos.service';
import { Route } from '@angular/router';


@Component({
  selector: 'app-about2',
  templateUrl: './about2.component.html',
  styleUrls: ['./about2.component.css']
})
export class About2Component implements OnInit {

  productoList=null;
  constructor(private ProductoSvc:ProductoService) {
    this.ProductoSvc.mostrarTodos().subscribe((result:any)=>{
      this.productoList = result;
      console.log(result)
    })
  }

  ngOnInit(): void {
  }

  agregar(): void{

  }

  eliminar(): void{
    
  }
}
