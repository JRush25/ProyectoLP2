import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { FormsModule } from '@angular/forms';
import { NouisliderModule } from 'ng2-nouislider';
import { JwBootstrapSwitchNg2Module } from 'jw-bootstrap-switch-ng2';
import { RouterModule } from '@angular/router';

import { ComponentsComponent } from './components.component';
import { InicioComponent } from './inicio/inicio.component';
import { ForoComponent } from './foro/foro.component';
import { CatalogoComponent } from './catalogo/catalogo.component';
import { ContactoComponent } from './contacto/contacto.component';
import { ObraComponent } from './obra/obra.component';
import { ListaobraComponent } from './listaobra/listaobra.component';
import { CrearobraComponent } from './crearobra/crearobra.component';

@NgModule({
    imports: [
        CommonModule,
        FormsModule,
        NgbModule,
        NouisliderModule,
        RouterModule,
        JwBootstrapSwitchNg2Module
      ],
    declarations: [
        ComponentsComponent,
        InicioComponent,
        ForoComponent,
        ContactoComponent,
        CatalogoComponent,
        ObraComponent,
        ListaobraComponent,
        CrearobraComponent
    ],
    exports:[ ComponentsComponent ]
})
export class ComponentsModule { }
