<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-berita-keluar",
  *      operationId="browseR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Browse R.IN.18 - Register Berita Keluar",
  *      description="Returns list of R.IN.18 - Register Berita Keluar",
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
  *      path="/v1/entities/register-berita-keluar/read?slug=register-berita-keluar&id={id}",
  *      operationId="readR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Get R.IN.18 - Register Berita Keluar based on id",
  *      description="Returns R.IN.18 - Register Berita Keluar based on id",
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
  *      path="/v1/entities/register-berita-keluar/add",
  *      operationId="addR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Insert new R.IN.18 - Register Berita Keluar",
  *      description="Insert new R.IN.18 - Register Berita Keluar into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDikirim":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-berita-keluar/edit",
  *      operationId="editR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Edit an existing R.IN.18 - Register Berita Keluar",
  *      description="Edit an existing R.IN.18 - Register Berita Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDikirim":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-berita-keluar/delete",
  *      operationId="deleteR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Delete one record of R.IN.18 - Register Berita Keluar",
  *      description="Delete one record of R.IN.18 - Register Berita Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-berita-keluar",
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
  *      path="/v1/entities/register-berita-keluar/delete-multiple",
  *      operationId="deleteMultipleR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Delete multiple record of R.IN.18 - Register Berita Keluar",
  *      description="Delete multiple record of R.IN.18 - Register Berita Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-berita-keluar",
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
  *      path="/v1/entities/register-berita-keluar/sort",
  *      operationId="sortR.IN.18-RegisterBeritaKeluar",
  *      tags={"register-berita-keluar"},
  *      summary="Sort existing R.IN.18 - Register Berita Keluar",
  *      description="Sort existing R.IN.18 - Register Berita Keluar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-berita-keluar",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDikirim":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal":"Abc", "nomor berita":"Abc", "tanggal berita":"Abc", "dari":"Abc", "kepada":"Abc", "perihal":"Abc", "tglJamDikirim":"2021-01-01T00:00:00.000Z", "jumlahHalaman":"123", "namaPetugas":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="nomor berita"), 
  *                         @OA\Property(type="string", property="tanggal berita"), 
  *                         @OA\Property(type="string", property="dari"), 
  *                         @OA\Property(type="string", property="kepada"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="tglJamDikirim"), 
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