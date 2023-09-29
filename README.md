# Game Project
## Connector
```mermaid
---
title: Connector Singleton
---
classDiagram
class Connector {
    -PDO connexion
    Connector instance$
    - __construct()
    getInstance()$ : Connector
}
```