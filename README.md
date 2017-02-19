# KnownLike

Rewrite of idno/Known/IdnoPlugins/Like 

Known's _bookmark_ Plugin, Like, doesn't display Likes or Reposts properly at all. This attempts to fix that.

This it at a very early stage - you'll want to use the `works` branch for now.


##Installation

Scary as it might sound, at the moment the only way to get this working is:

- Turn _off_ the `Bookmarks` Plugin

```
 $ cd Known/IdnoPlugins/
 $ rm -rf Like/
 $ git clone https://github.com/dg01d/KnownLike.git Like
 $ cd Like
 $ git checkout works
```

- Turn _on_ the `Bookmarks` Plugin

##Notes

This hasn't been written up properly as an alternative plugin yet. Just trying to get it working. If it works, I'll do the init properly and remove references to the project &c

