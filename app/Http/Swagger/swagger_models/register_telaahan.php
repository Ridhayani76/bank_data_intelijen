<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-telaahan",
  *      operationId="browseR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Browse R.IN.19 - Register Telaahan",
  *      description="Returns list of R.IN.19 - Register Telaahan",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-telaahan/read?slug=register-telaahan&id={id}",
  *      operationId="readR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Get R.IN.19 - Register Telaahan based on id",
  *      description="Returns R.IN.19 - Register Telaahan based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-telaahan/add",
  *      operationId="addR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Insert new R.IN.19 - Register Telaahan",
  *      description="Insert new R.IN.19 - Register Telaahan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor berita":"Abc", "tanggal berita":"Abc", "pembuat":"Abc", "perihal":"Abc", "lampiran":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-telaahan/edit",
  *      operationId="editR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Edit an existing R.IN.19 - Register Telaahan",
  *      description="Edit an existing R.IN.19 - Register Telaahan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor berita":"Abc", "tanggal berita":"Abc", "pembuat":"Abc", "perihal":"Abc", "lampiran":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-telaahan/delete",
  *      operationId="deleteR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Delete one record of R.IN.19 - Register Telaahan",
  *      description="Delete one record of R.IN.19 - Register Telaahan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-telaahan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-telaahan/delete-multiple",
  *      operationId="deleteMultipleR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Delete multiple record of R.IN.19 - Register Telaahan",
  *      description="Delete multiple record of R.IN.19 - Register Telaahan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-telaahan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-telaahan/sort",
  *      operationId="sortR.IN.19-RegisterTelaahan",
  *      tags={"register-telaahan"},
  *      summary="Sort existing R.IN.19 - Register Telaahan",
  *      description="Sort existing R.IN.19 - Register Telaahan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-telaahan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nomor berita":"Abc", "tanggal berita":"Abc", "pembuat":"Abc", "perihal":"Abc", "lampiran":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nomor berita":"Abc", "tanggal berita":"Abc", "pembuat":"Abc", "perihal":"Abc", "lampiran":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nomor berita"), 
  *                         @OA\Property(type="string", property="tanggal berita"), 
  *                         @OA\Property(type="string", property="pembuat"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="lampiran"), 
  *                         @OA\Property(type="string", property="tindak lanjut"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */