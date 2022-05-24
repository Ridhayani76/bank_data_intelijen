<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-berita-masuk",
  *      operationId="browseR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Browse R.IN.17 - Register Berita Masuk",
  *      description="Returns list of R.IN.17 - Register Berita Masuk",
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
  *      path="/v1/entities/register-berita-masuk/read?slug=register-berita-masuk&id={id}",
  *      operationId="readR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Get R.IN.17 - Register Berita Masuk based on id",
  *      description="Returns R.IN.17 - Register Berita Masuk based on id",
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
  *      path="/v1/entities/register-berita-masuk/add",
  *      operationId="addR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Insert new R.IN.17 - Register Berita Masuk",
  *      description="Insert new R.IN.17 - Register Berita Masuk into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDiterima":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-berita-masuk/edit",
  *      operationId="editR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Edit an existing R.IN.17 - Register Berita Masuk",
  *      description="Edit an existing R.IN.17 - Register Berita Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDiterima":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-berita-masuk/delete",
  *      operationId="deleteR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Delete one record of R.IN.17 - Register Berita Masuk",
  *      description="Delete one record of R.IN.17 - Register Berita Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-berita-masuk",
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
  *      path="/v1/entities/register-berita-masuk/delete-multiple",
  *      operationId="deleteMultipleR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Delete multiple record of R.IN.17 - Register Berita Masuk",
  *      description="Delete multiple record of R.IN.17 - Register Berita Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-berita-masuk",
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
  *      path="/v1/entities/register-berita-masuk/sort",
  *      operationId="sortR.IN.17-RegisterBeritaMasuk",
  *      tags={"register-berita-masuk"},
  *      summary="Sort existing R.IN.17 - Register Berita Masuk",
  *      description="Sort existing R.IN.17 - Register Berita Masuk",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-berita-masuk",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDiterima":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDiterima":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="nomor berita"), 
  *                         @OA\Property(type="string", property="tanggal berita"), 
  *                         @OA\Property(type="string", property="dari"), 
  *                         @OA\Property(type="string", property="kepada"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="tglJamDiterima"), 
  *                         @OA\Property(type="integer", property="jumlahHalaman"), 
  *                         @OA\Property(type="string", property="namaPetugas"), 
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