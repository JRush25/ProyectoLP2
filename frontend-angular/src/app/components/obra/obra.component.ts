import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-obra',
  templateUrl: './obra.component.html',
  styleUrls: ['./obra.component.css']
})
export class ObraComponent implements OnInit {

  public listObras:any = []

  constructor(private http:HttpClient) { }

  ngOnInit(): void {
    this.cargarData();
  }
  
  public cargarData(){
    this.http.get('http://localhost:8000/api/obras').subscribe((result)=>{
      this.listObras = result;
    })
  }  
}
