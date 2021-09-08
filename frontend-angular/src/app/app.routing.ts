import { NgModule } from '@angular/core';
import { CommonModule, } from '@angular/common';
import { BrowserModule  } from '@angular/platform-browser';
import { Routes, RouterModule } from '@angular/router';

import { ComponentsComponent } from './components/components.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { ForoComponent } from './components/foro/foro.component';
import { CatalogoComponent } from './components/catalogo/catalogo.component';
import { ContactoComponent } from './components/contacto/contacto.component';
import { ObraComponent } from './components/obra/obra.component';
import { ListaobraComponent } from './components/listaobra/listaobra.component';

const routes: Routes =[
    { path: '', redirectTo: 'inicio', pathMatch: 'full' },
    { path: 'index',                component: ComponentsComponent },
    { path: 'inicio',     component: InicioComponent },
    { path: 'foro',       component: ForoComponent },
    { path: 'catalogo',     component: CatalogoComponent },
    { path: 'contacto',     component: ContactoComponent },
    { path: 'obra',     component: ObraComponent },
    { path: 'listaobra', component:ListaobraComponent}

];

@NgModule({
    imports: [
        CommonModule,
        BrowserModule,
        RouterModule.forRoot(routes)
    ],
    exports: [
    ],
})
export class AppRoutingModule { }
